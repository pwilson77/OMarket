pragma solidity ^0.4.25;
contract Escrow {
    address buyer;
    address seller;
    uint amount;

    function escrow() public{
        // setBuyer
        buyer = msg.sender;
    }

    function setSellerAndAmt(address sellerAddress, uint amt)public payable  {
        seller = sellerAddress;
        if (msg.value >= amt)  {
            amount = amt;
        }
    }

    function release() public {
        //Only allow buyer to release the funds
        if (msg.sender == buyer) {
            seller.transfer(amount);
            selfdestruct(buyer);
        }
    }

    function void() public {
        //Only allow seller to void the contract
        if (msg.sender == seller) {
            selfdestruct(buyer);
        }
    }
}