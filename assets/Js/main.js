// Determine special attribute according to type switcher
const SELECT = $('#productType');
const SizeDiv = $('#sizeDiv');
const WeightDiv = $('#weightDiv');
const FurnitureDiv = $('#furnitureDiv');
$(document).ready(() => { SELECT.change(() => {switchTypes();}); switchTypes();});
const switchTypes = () => {
  if (SELECT.val() === 'default') { WeightDiv.hide(); SizeDiv.hide(); FurnitureDiv.hide();}
  if (SELECT.val() === 'Book') { WeightDiv.show(); SizeDiv.hide(); FurnitureDiv.hide();}
  if (SELECT.val() === 'Furniture') { WeightDiv.hide(); SizeDiv.hide(); FurnitureDiv.show();}
  if (SELECT.val() === 'DVD') { WeightDiv.hide(); SizeDiv.show(); FurnitureDiv.hide();}
  $("#size").val(''); $("#weight").val(''); $("#height").val(''); $("#width").val(''); $("#length").val('');
};

//Add new product
$('#save-product-btn').on('click', function () {
    let sku = $("#sku").val();
    let name = $("#name").val();
    let price = $("#price").val();
    let select = $("#productType").val();
    let size = $("#size").val();
    let weight = $("#weight").val();
    let height = $("#height").val();
    let width = $("#width").val();
    let length = $("#length").val();

    $.ajax({
      url: '/ProductControl/add',
      method: 'POST',
      data: {
          sku: sku,
          name: name,
          price: price,
          select : select,
          size: size,
          weight: weight,
          height: height,
          width: width,
          length: length,
      },
      success: function(response){
        if(!JSON.parse(response).status){
          $('#ErorrDiv').html('<br><div class="col-sm-5 mb-3 p-3 text-bg-danger rounded-3 fw-bold" role="alert">' + JSON.parse(response).message + '</div>');
        }
        else if(JSON.parse(response).status && JSON.parse(response).message){ window.location.replace("/");}
      },
      error: function (err) {
        console.log(err);
      },
    });
});

// Clear Window form Cash
if ( window.history.replaceState ) { window.history.replaceState( null, null, window.location.href );}