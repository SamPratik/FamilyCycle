@push('styles')
<style media="screen">
    .bmr-form span {
      font-size: 14px;
      padding: 0px;
    }
    .bmr-form label {
      font-size: 14px;
    }
</style>
@endpush

<p class="well">Basal Metabolic Rate is the number of calories required to keep your body functioning at rest. BMR is also known as your body’s metabolism; therefore, any increase to your metabolic weight, such as exercise, will increase your BMR. To get your BMR, simply input your height, gender, age and weight below. Once you’ve determined your BMR, you can begin to monitor how many calories a day you need to maintain or lose weight.</p>

<form class="row bmr-form" style="padding:0px 20px;">
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
      <input type="button" class="btn btn-primary" value="Calculate BMR">
    </div>
</form>

<p class="well">Your Basal Metabolic Rate is : <strong>22.45</strong></p>
