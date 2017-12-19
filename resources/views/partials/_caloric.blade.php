@push('styles')
<style media="screen">
    .caloric-form span {
      font-size: 14px;
      padding: 0px;
    }
    .caloric-form label {
      font-size: 14px;
    }
</style>
@endpush

<p class="well">Use our calorie-intake calculator to determine your daily caloric needs based on your height, weight, age and activity level. In addition to determining the calories needed to maintain weight, use this as a calorie burner calculator and figure out how many calories you need to burn in order to drop pounds. Then use the nutritional needs calculator and figure out how to break those calories into carbs, proteins and fat.</p>

<form class="row caloric-form" style="padding:0px 20px;">
    <div class="row form-group">
        <label class="col-md-2">Gender:</label>
        <div class="col-md-4" style="margin-top: 3px;">
            <label class="col-md-6"><input type="radio" name="optradio"> Male</label>
            <label class="col-md-6"><input type="radio" name="optradio"> Female</label>
        </div>
    </div>
    <div class="row form-group">
        <label class="col-md-2">Height:</label>
        <div class="col-md-4">
            <select class="form-control" id="">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <span class="col-md-1">feet</span>
        <div class="col-md-4">
            <select class="form-control" id="">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <span class="col-md-1">inches</span>
    </div>
    <div class="row form-group">
        <label class="col-md-2">Weight:</label>
        <div class="col-md-4">
            <input class="form-control" type="text" name="" value="">
        </div>
        <span class="col-md-1">pounds</span>
    </div>
    <div class="row form-group">
        <label class="col-md-2">Age:</label>
        <div class="col-md-4">
            <input class="form-control" type="number" name="" value="">
        </div>
        <span class="col-md-1">Years</span>
    </div>
    <div class="row form-group">
        <label class="col-md-2">Activity Level:</label>
        <div class="col-md-4">
            <select class="form-control" id="">
                <option>Sedentary (little or no exercise)</option>
                <option>Lightly Active (light exercise/sports 1-3 days/week)</option>
                <option>Moderatetely Active (moderate exercise/sports 3-5 days/week)</option>
                <option>Very Active (hard exercise/sports 6-7 days a week)</option>
                <option>Extra Active (very hard exercise/sports & physical job or 2x training)</option>
            </select>
        </div>
    </div>
    <div class="form-group text-center">
      <input type="button" class="btn btn-primary" value="Calculate Caloric Needs">
    </div>
</form>

<p class="well">To maintain your current weight you'll need <strong>2200</strong> calories per day</p>
