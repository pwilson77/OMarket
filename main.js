window.addEventListener("load", function() {
  // Checking if Web3 has been injected by the browser (Mist/MetaMask)
  if (typeof web3 !== "undefined") {
    // Use Mist/MetaMask's provider
    web3js = new Web3(web3.currentProvider);
  } else {
    // Handle the case where the user doesn't have web3. Probably
    // show them a message telling them to install Metamask in
    // order to use our app.
  }

  // Now you can start your app & access web3js freely:
});

var escrowContractABI = [
  {
    constant: false,
    inputs: [],
    name: "release",
    outputs: [],
    payable: false,
    stateMutability: "nonpayable",
    type: "function"
  },
  {
    constant: false,
    inputs: [],
    name: "void",
    outputs: [],
    payable: false,
    stateMutability: "nonpayable",
    type: "function"
  },
  {
    constant: false,
    inputs: [
      { name: "sellerAddress", type: "address" },
      { name: "amt", type: "uint256" }
    ],
    name: "setSellerAndAmt",
    outputs: [],
    payable: true,
    stateMutability: "payable",
    type: "function"
  },
  {
    constant: false,
    inputs: [],
    name: "escrow",
    outputs: [],
    payable: false,
    stateMutability: "nonpayable",
    type: "function"
  }
];
var escrowContractAddress = "0x7ebb95bf419dc054beb163c6fd1c4c45a2885668";
var escrowContract = web3.eth.contract(escrowContractABI);
var escrowContractInstance = escrowContract.at(escrowContractAddress);

$("#pay").on("click", function() {
  var sellerAddress = $("#sellerAddress").val();
  var sellerAmountUnconverted = $("#sellerPrice").val();
  var sellerAmountConverted = web3.toWei(sellerAmountUnconverted, "ether");
  escrowContractInstance.setSellerAndAmt(
    sellerAddress,
    sellerAmountConverted,
    {
      from: web3.eth.accounts[0],
      value: web3.toWei("2", "ether"),
      data: sellerAddress,
      sellerAmountConverted
    },
    function(err, result) {
      if (!err) {
        console.log("succesful");
      } else {
        alert(err);
      }
    }
  );
});
