@push('styles')
  <style media="screen">
    .bmi-form {
      font-size: 14px;
    }
    .bmi-form span {
      padding: 0px;
    }
    .bmi-form label {
      font-size: 14px;
    }
  </style>
@endpush

<p class="well">Knowing BMI can help adult men and women understand their overall health. Use the BMI calculator below to determine your body mass index by inputting your height and weight. The BMI calculator uses the following BMI formula: Weight (lb) / (Height (in))² x 703.</p>
<form class="bmi-form" action="index.html" method="post">
    <div class="row">
        <p class="col-md-2"><label for="sel1">Your Height:</label></p>
        <div class="form-group col-md-4">
            <select class="form-control" id="sel1">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </div>
        <span class="col-md-1">feet</span>
        <div class="form-group col-md-4">
            <select class="form-control" id="sel1">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
            </select>
        </div>
        <span class="col-md-1">inches</span>

    </div>
    <div class="row">
        <p class="col-md-2"><label for="sel1">Your Weight:</label></p>
        <div class="form-group col-md-4">
            <input type="text" class="form-control" name="" value="" placeholder="Your Weight">
        </div>
        <span class="col-md-1">pounds</span>
    </div>
    <div class="form-group text-center">
      <input type="button" class="btn btn-primary" value="Calculate BMI">
    </div>
</form>

<div class="well">
    <strong>Your Body Mass Index is : </strong><span> 22.1</span>
</div>


<div>
    <strong>Understanding your Body Mass Index</strong><br>
    <p>
        <strong>If your BMI is below 18.5:</strong> Your BMI is considered underweight. Keep in mind that an underweight BMI calculation may pose certain health risks. Please consult your healthcare provider for more information about BMI calculations.
        <br>
        <strong>If your BMI is between 18.5-24.9:</strong> Your BMI is considered normal. This healthy weight helps reduce your risk of serious health conditions and means you’re close to your fitness goals.
        <br>
        <strong>If your BMI is above 30:</strong> Your BMI is considered overweight. Being overweight may increase your risk of cardiovascular disease. Consider making lifestyle changes through healthy eating and fitness to improve your health. Our Couch to 5K training plan is a great place to start.
    </p>
</div>
