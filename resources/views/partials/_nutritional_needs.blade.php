@push('styles')
    <style media="screen">
        .caloric-needs-form label {
          font-size: 14px;
        }
        .caloric-needs-form {
          padding: 0px 20px;
        }
        .nutrional-needs-advice {
          font-size: 14px;
        }
    </style>
@endpush

<p class="well">After you've used Active's calorie calculator to determine your daily caloric needs, use this nutritional needs calculator to find out how to break out those calories into carbohydrates, proteins and fats.</p>

<form class="row caloric-needs-form">
    <div class="form-group row">
        <label class="col-md-4" for="">Your Daily Caloric Needs: </label>
        <div class="col-md-4">
            <input type="number" class="form-control" name="" value="">
        </div>
        <span class="col-md-1">calories</span>
    </div>
    <div class="form-group text-center">
        <input type="button" class="btn btn-primary" name="" value="Calculate Nutritional Needs">
    </div>
</form>

<ul class="list-group nutrional-needs-advice">
  <li class="list-group-item row">
    <strong class="col-md-4">Carbohydrates</strong>
    <span class="col-md-4">264-381 Grams/Day</span>
    <span class="col-md-4">1,055-1,524 Calories/Day</span>
    <p class="clear:both;"></p>
  </li>
  <li class="list-group-item row">
    <strong class="col-md-4">Proteins</strong>
    <span class="col-md-4">59-206 Grams/Day</span>
    <span class="col-md-4">235-821 Calories/Day</span>
    <p class="clear:both;"></p>
  </li>
  <li class="list-group-item row">
    <strong class="col-md-4">Fats</strong>
    <span class="col-md-4">53-92 Grams/Day</span>
    <span class="col-md-4">469-821 Calories/Day</span>
    <p class="clear:both;"></p>
  </li>
</ul>
