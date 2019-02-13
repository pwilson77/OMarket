pragma solidity ^0.5.0;
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
    
    function getSellerAndBuyerDetails()public view returns(address, address, uint){
        return(seller,buyer,amount);
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