/// <reference path="../typings/index.d.ts" />
function change(x) {
    if (x == '1') {
        $('.show').html(`<div class="form-group row my-3 DVD-disc">
        <label for="Size" class="col-sm-3 col-form-label fw-bold">Size(MB)</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="size" name="Size" required>
        </div>
        <p class="fw-bold mt-3 ">please,provide size with (MB).</p>
    </div>`);
    }
    else if (x == '2') {
        $('.show').html(`<div class="form-group row my-3  Book">
      <label for="Weight" class="col-sm-3 col-form-label fw-bold">Weight(KG)</label>
      <div class="col-sm-9">
          <input type="number" class="form-control" id="weight" name="Weight" required>
      </div>
      <p class="fw-bold mt-3">please,provide weight with (KG).</p>
  </div>`);
    }
    else if (x == '3') {
       $('show').html(`<div class="Furniture ">
       <div class="form-group row my-3">
           <label for="Height" class="col-sm-3 col-form-label fw-bold">Height</label>
           <div class="col-sm-9">
               <input type="number" class="form-control" id="height" name="Height" required>
           </div>
       </div>
       <div class="form-group row my-3">
           <label for="Width" class="col-sm-3 col-form-label fw-bold">Width</label>
           <div class="col-sm-9">
               <input type="number" class="form-control" id="width" name="Width" required>
           </div>
       </div>
       <div class="form-group row my-3">
           <label for="Length" class="col-sm-3 col-form-label fw-bold">Length</label>
           <div class="col-sm-9">
               <input type="number" class="form-control" id="length" name="Length" required>
           </div>
       </div>
   </div>`)
    }

}
