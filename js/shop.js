// window.onload = async function () {
//   let products = await GetAllProducts();
//   let productHtml = "";
//   products.forEach((element) => {
//     $("#product-data").append(`<div class="col-md-4">
//     <div class="product-item">
//       <div class="product-thumb">
//         <span class="bage">Sale</span>
//         <img class="img-responsive" src=${element.image} alt="product-img" />
//         <div class="preview-meta">
//           {
//             products
//           }
//           <ul>
//             <li>
//               <span  data-toggle="modal" data-target="#product-modal">
//                 <i class="tf-ion-ios-search-strong"></i>
//               </span>
//             </li>
//             <li>
//                           <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
//             </li>
//             <li>
//               <a href="#!"><i class="tf-ion-android-cart"></i></a>
//             </li>
//           </ul>
//                     </div>
//       </div>
//       <div class="product-content">
//         <h4><a href="product-single.html">Reef Boardsport</a></h4>
//         <p class="price">${`$` + element.price}</p>
//       </div>
//     </div>
//   </div>`);
//   });

//   console.log("products : ", products);
// };
// async function GetAllProducts() {
//   const response = await fetch("https://fakestoreapi.com/products?limit=5");
//   const products = await response.json();
//   //console.log(products);
//   return products;
// }
