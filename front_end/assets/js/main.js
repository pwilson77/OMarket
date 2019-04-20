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
    name: "accept",
    outputs: [],
    payable: false,
    type: "function",
    stateMutability: "nonpayable"
  },
  {
    constant: false,
    inputs: [],
    name: "cancel",
    outputs: [],
    payable: false,
    type: "function",
    stateMutability: "nonpayable"
  },
  {
    constant: false,
    inputs: [],
    name: "deposit",
    outputs: [],
    payable: true,
    type: "function",
    stateMutability: "payable"
  },
  {
    constant: false,
    inputs: [],
    name: "kill",
    outputs: [],
    payable: false,
    type: "function",
    stateMutability: "nonpayable"
  },
  {
    inputs: [
      {
        name: "buyer_address",
        type: "address"
      },
      {
        name: "seller_address",
        type: "address"
      }
    ],
    payable: false,
    type: "constructor",
    stateMutability: "nonpayable"
  },
  {
    constant: true,
    inputs: [],
    name: "buyer",
    outputs: [
      {
        name: "",
        type: "address"
      }
    ],
    payable: false,
    type: "function",
    stateMutability: "view"
  },
  {
    constant: true,
    inputs: [],
    name: "seller",
    outputs: [
      {
        name: "",
        type: "address"
      }
    ],
    payable: false,
    type: "function",
    stateMutability: "view"
  }
];
var escrowContractAddress = "0x2baa8b1d6a2f49b18340ad55e92c245ab3df95e9";
var escrowContract = web3.eth.contract(escrowContractABI);
var escrowContractInstance = escrowContract.at(escrowContractAddress);
var sellerAmountUnconverted;

// $("#seller").on("submit", function() {
//   var sellerAddress = $("#sellerAddress").val();
//   var sellerAmountUnconverted = parseInt(
//     document.getElementById("sellerPrice").value
//   );
//   var sellerAmountConverted = web3.toWei(sellerAmountUnconverted, "ether");
//   escrowContractInstance.setSellerAndAmt(
//     sellerAddress,
//     sellerAmountConverted,
//     {
//       from: web3.eth.accounts[0],
//       value: web3.toWei(sellerAmountUnconverted, "ether")
//     },
//     function(err, result) {
//       if (!err) {
//         console.log("succesful");
//       } else {
//         alert(err);
//       }
//     }
//   );
// });

function createContract(buyer, seller) {
  escrowContractInstance(buyer, seller);
}

function accept() {
  escrowContractInstance.accept();
}

function cancel() {
  escrowContractInstance.cancel();
}
