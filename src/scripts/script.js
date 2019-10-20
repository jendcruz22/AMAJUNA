$("#add_product_button").css("display","none");

function add_mobile_input(){
    $("#add_product_button").css("display","block");
    $("#form_input1").html(`
        <div class="form-label-group">
            <input name="brand" type="text" id="prod_desc" class="form-control" placeholder="Product Description" required autofocus>
            <label for="prod_desc">Brand</label>
        </div>
    `);
    $("#form_input2").html(`
        <div class="form-label-group">
            <input name="screen_size" type="text" id="prod_desc" class="form-control" placeholder="Product Description" required autofocus>
            <label for="prod_desc">Size of display screen</label>
        </div>
    `);
    $("#form_input3").html(`
        <div class="form-label-group">
            <input name="ram" type="text" id="prod_desc" class="form-control" placeholder="Product Description" required autofocus>
            <label for="prod_desc">Size of RAM</label>
        </div>
    `);

}

function add_vehicles_input(){
    $("#add_product_button").css("display","block");
    $("#form_input1").html(`
        <div class="form-label-group">
            <input name="brand" type="text" id="prod_desc" class="form-control" placeholder="Product Description" required autofocus>
            <label for="prod_desc">Brand</label>
        </div>
    `);
    $("#form_input2").html(`
        <div class="form-label-group">
            <input name="type_of_vehicle" type="text" id="prod_desc" class="form-control" placeholder="Product Description" required autofocus>
            <label for="prod_desc">Vehicle type</label>
        </div>
    `);
    $("#form_input3").html(`
        <div class="form-label-group">
            <input name="seating_capacity" type="text" id="prod_desc" class="form-control" placeholder="Product Description" required autofocus>
            <label for="prod_desc">Total Capacity of seats</label>
        </div>
    `);


}