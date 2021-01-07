@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Les dates')
{{-- vendor styles --}}
@section('vendor-styles')
<!-- DatePicker -->
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">

@endsection

@section('content')


<section id="">
    <div class="row justify-content-md-center">
        <div class="col col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Modifier : {{ $date->ville }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">

                        <!-- 
                        date
                        ville
                        cp
                        commentaire
                        -->
                        <?php
                        \Carbon\Carbon::setLocale('fr_FR'); 
                        $dateFormat = \Carbon\Carbon::parse($date->date)->translatedFormat('j F, Y');
                        ?>
                        <form action="{{ route('dates.update', $date->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="row">
                                <!-- Date -->
                                <div class="col-6">
                                    <label for="basicInput">Date</label>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        
                                        <input type="text" class="form-control pickadate-translations" name="date" data-value="{{ old('title', $date->date) }}" required>
                                        <div class="form-control-position">
                                        <i class='bx bx-calendar'></i>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Ville -->
                                <div class="col-8">
                                    <!-- <div class="form-group">
                                        <select class="select2 form-control">
                                            <option value="square">Square</option>
                                            <option value="rectangle">Rectangle</option>
                                            <option value="rombo">Rombo</option>
                                            <option value="romboid">Romboid</option>
                                            <option value="trapeze">Trapeze</option>
                                            <option value="traible">Triangle</option>
                                            <option value="polygon">Polygon</option>
                                        </select>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="ville">Ville</label>
                                        <input type="search" id="address" name="ville" class="form-control"  value="{{ old('title', $date->ville) }}" required>
                                    </div>
                                </div>
                                <!-- CP -->
                                <div class="col-2">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Code Postal</label>
                                        <input type="text" class="form-control" id="cp" name="cp" value="{{ old('title', $date->cp) }}" placeholder="43000" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <!-- Commentaire -->
                                    <fieldset class="form-group">
                                        <label for="basicInput">Commentaire</label>
                                        <input type="text" class="form-control" id="basicInput" name="commentaire" value="{{ old('title', $date->commentaire) }}" placeholder="Commentaire">
                                    </fieldset>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-light-primary">Valider</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--/ HTML Markup -->
@endsection
{{-- vendor scripts --}}
@section('vendor-scripts')
<!-- DatePicker -->
<script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<!-- Select Multiple -->
<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
@endsection
@section('page-scripts')
<!-- DatePicker -->
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>    
<!-- AutoSelect Ville -->
<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>
<script>
// AutoSelect Ville
(function() {
$(document).ready(function () {
  bsCustomFileInput.init();
});
  
  var placesAutocomplete = places({
    appId: 'plEI2RQM6E2H',
    apiKey: 'fca9edda418cb2c602527602a5641ccd',
    container: document.querySelector('#address'),
    templates: {
      value: function(suggestion) {
        return suggestion.name;
      }
    }
  }).configure({
    type: 'city'
  });

  placesAutocomplete.on('change', function resultSelected(e) {
    document.querySelector('#cp').value = e.suggestion.postcode || '';
  });
})();
// Fin AutoSelect Ville
</script>
@endsection