<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

<style media="screen">
body{
  font-family: 'Ubuntu', sans-serif;
}
.calculator{
  background: skyblue;
  padding:5%;
  width: 90%;
  margin: 30px auto;
}

.white{
  width: 100%;
  background:white;
  border-radius: 3px;
  border: 1px solid #eee;
  padding: 5px;
  madrgin-left: 10px;
}
.gray{
  background: #eee;
  padding: 10px;
  margin-top: 20px;
}


</style>

<script type="text/javascript">

jQuery(document).ready(function ($) {

  function update(){
    var type = $('input[name=animalType]:checked').val();
    console.log(type);

    var readers = $('input[name=readers]').val();

    var head = $('input[name=head]').val();

    var price1 = readers*1500+head*896;

    var animals = $('#animals').val();

console.log(readers);
    var tier;
    var pricePerAnimal;
    var price2 = 0;
    var discount;

    if(type == "cattle"){

        if(animals<=400){
          tier = 1;
          pricePerAnimal = 0.55;
          discount = 0;
          price2 = 220;
        }else if( animals <= 1600){
          tier = 2;
          pricePerAnimal = 0.49;
          discount = 10;
          price2 = 784;
        }else if(animals <= 5400){
          tier = 3;
          pricePerAnimal = 0.44;
          discount = 20;
          price2 = 2376;
        }else{
          tier = 4;
          pricePerAnimal = 0.39;
          discount = 30;
          price2 = 0;


        }


    }else{

      if(animals<=2500){
        tier = 1;
        pricePerAnimal = 0.55;
        discount = 0;
        price2 = 1375;
      }else if(animals <=5000){
        tier = 2;
        pricePerAnimal = 0.49;
        discount = 10;
        price2 = 2450;
      }else if(animals <=10000){
        tier = 3;
        pricePerAnimal = 0.44;
        discount = 20;
        price2= 4400;
      }else{
        tier = 4;
        pricePerAnimal = 0.39;
        discount = 30;
        price2 = 0;

      }

    }



    var price = price1 + price2;
    console.log(price);
    $('#tier').html('Tier '+tier);
    $('#pricePerAnimal').html(pricePerAnimal+"$");
    $('#discount').html(discount+"%");
    $('#price1').html(price1);
if(price2 == 0)
    $('#price2').html(price2);
else
    $("#price2").html("Quote on request");

    $('#price').html(price);
  }

  $('select').change(function(){
    update();
  });
  $('input').change(function(){
    update();
  });

});
</script>

<body>


  <div class="step">

    <h1>Step 1: Choose livestock type </h1>

    <div class="row">

      <div class="input-group mb-3 col-6">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <input type="radio" name="animalType" value="sheep">
          </div>
        </div>
        <div class="form-control">
          Sheep
        </div>
      </div>

      <div class="input-group mb-3 col-6">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <input type="radio" name="animalType" value='cattle'>
          </div>
        </div>
        <div class="form-control">
          Cattle
        </div>
      </div>
    </div>


  </div>

  <div class="step">
    <h1> <b>Step 2:</b> Getting started (minimum 1 of each required)  </h1>


        <div class="form-group row">



          <div class="col-3 text-right">
            <span class='input-group-text' id="">Number of readers</span>
          </div>


          <div class="col-3 ">
            <input class='form-control' type="number" name="readers" value="1">
          </div>




          <div class="col-3">

            <span class="input-group-text" id="">Number of head units</span>
          </div>

          <div class="col-3">
          <input class='form-control' type="number" name="head" value="1">
        </div>

        </div>




      <br>

      <div class="row justify-content-center">

        <div class="input-group col-3 justify-self-center">

          <div class="input-group-prepend">
            <span class="input-group-text" id="">Sub total annual cost</span>
          </div>

          <div class='form-control' id="price1">

          </div>

          <div class="input-group-append">
            <span class='input-group-text'>$</span>
          </div>

        </div>
      </div>

  </div>

<div class="step">

    <h1> Step 3: Annual cost </h1>

    <div class="row form-group">
      <div class="input-group col-6">

      <div class="input-group-prepend">
        <span class="input-group-text" id="">Number of animals</span>
      </div>

      <input class='form-control' type="number" id="animals" name="animals" value="1">

    </div>
      <div class="input-group col-6">

        <div class="input-group-prepend">
          <span class="input-group-text" id="">Price per animal</span>
        </div>

        <div class="form-control" id="pricePerAnimal">

        </div>

      </div>
    </div>

    <div class="row form-group">
      <div class="input-group col-6">

      <div class="input-group-prepend">
        <span class="input-group-text" id="">Subscription tier</span>
      </div>

      <div class="form-control" id="tier">

      </div>

    </div>
      <div class="input-group col-6">

      <div class="input-group-prepend">
        <span class="input-group-text" id="">Discount</span>
      </div>

      <div class="form-control" id='discount'>

      </div>

    </div>

    </div>

  <div class="row justify-content-center">

    <div class="input-group col-4">

      <div class="input-group-prepend">
        <span class="input-group-text" id="">Subtotal anual cost</span>
      </div>

      <div class="form-control" id="price2">

      </div>
      <div class="input-group-append">
        <span class="input-group-text">$</span>
      </div>

    </div>



  </div>

</div>

<div class="step">
  <h1> Your total cost to get started</h1>

    <div class="input-group col-3">

    <div class="input-group-prepend">
      <span class="input-group-text" id="">Total</span>
    </div>

    <div class="form-control" id="price">

    </div>

    <div class="input-group-append">
      <span class='input-group-text'>$</span>
    </div>
  </div>



</div>



<style media="screen">

.step{
  width: 95%;
  margin: 10px auto;
  padding-bottom: 50px;
}
.step h1{

  background: #334;
  color: white;
  padding: 15px 30px;
  font-weight: lighter;
  font-size: 1.7em;
  margin-bottom: 30px;
}

</style>

</body>
</html>
