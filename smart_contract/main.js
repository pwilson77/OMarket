// window.addEventListener("load", function() {
//   // Checking if Web3 has been injected by the browser (Mist/MetaMask)
//   if (typeof web3 !== "undefined") {
//     // Use Mist/MetaMask's provider
//     web3js = new Web3(web3.currentProvider);
//   } else {
//     // Handle the case where the user doesn't have web3. Probably
//     // show them a message telling them to install Metamask in
//     // order to use our app.
//   }

//   // Now you can start your app & access web3js freely:
// });

// var escrowContractABI = [
//   {
//     constant: false,
//     inputs: [],
//     name: "release",
//     outputs: [],
//     payable: false,
//     stateMutability: "nonpayable",
//     type: "function"
//   },
//   {
//     constant: true,
//     inputs: [],
//     name: "getSellerAndBuyerDetails",
//     outputs: [
//       { name: "", type: "address" },
//       { name: "", type: "address" },
//       { name: "", type: "uint256" }
//     ],
//     payable: false,
//     stateMutability: "view",
//     type: "function"
//   },
//   {
//     constant: false,
//     inputs: [],
//     name: "void",
//     outputs: [],
//     payable: false,
//     stateMutability: "nonpayable",
//     type: "function"
//   },
//   {
//     constant: false,
//     inputs: [
//       { name: "sellerAddress", type: "address" },
//       { name: "amt", type: "uint256" }
//     ],
//     name: "setSellerAndAmt",
//     outputs: [],
//     payable: true,
//     stateMutability: "payable",
//     type: "function"
//   },
//   {
//     constant: false,
//     inputs: [],
//     name: "escrow",
//     outputs: [],
//     payable: false,
//     stateMutability: "nonpayable",
//     type: "function"
//   }
// ];
// var escrowContractAddress = "0x0b9c69752a1fe960273c8abcecf1dd719879f084";
// var escrowContract = web3.eth.contract(escrowContractABI);
// var escrowContractInstance = escrowContract.at(escrowContractAddress);
// var sellerAmountUnconverted;

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
