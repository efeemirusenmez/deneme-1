<style>
.iletisim {
  background-color:dimgrey; 
}
.iletisim .row  label{
display:block;
padding: 5px 0px 5px 50px;
}
.iletisim .row  input{
display:block;
margin: 5px 0px 5px 20px;
}
.iletisim .row  span{
display:block-left;
padding: 5px 0px 5px 20px;
}
.iletisim .row  select{
display:block-left;
margin: 5px 0px 5px 20px;
}
.iletisim .row  button{
display:block-left;
margin: 5px 0px 5px 20px;
color:red
}
</style>
<div class="iletisim" action="iletisim.php">

          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label" ><strong><font color="red">First name</font></strong><br></label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">

              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label" ><strong><font color="red">Last name</font></strong><br></label>
              <input  type=text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
               
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label"><strong><font color="red">Username</font></strong><br></label>
              <div class="input-group has-validation">
                <!--span class="input-group-text">@</span-->
                <input  type="text" class="form-control" id="username" placeholder="Username" required="">
              <div class="invalid-feedback">
                  <br>
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label" ><font color="red">Email<font> <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                <br>
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
               <br>
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required="">
                <option value="">Choose...</option>
                <option>United States</option>
                <option>Turkey</option>
                <option>France</option>
                <option>Germany</option>
                
              </select>
              <div class="invalid-feedback">
                <br>
              </div>
            </div> 
            
            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>

            
          </div>
</div>