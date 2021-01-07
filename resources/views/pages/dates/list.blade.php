@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Les dates')
{{-- vendor styles --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection

@section('content')


<section id="basic-datatable">
@if(session('info'))
    <div class="alert bg-rgba-success alert-dismissible mb-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <div class="d-flex align-items-center">
        <i class="bx bx-like"></i>
        <span>
        {{ session('info') }}
        </span>
        </div>
    </div>
@endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Les dates</h4>
                    
                    <div class="text-right">
                        <a href="{{ route('dates.create') }}">
                            <button type="submit" class="btn btn-light-success">Ajouter une date</button>
                        </a>
                    </div>
                    
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <p class="card-text">Liste des prochaines dates.</p>
                        <div class="table-responsive">
                            <table id="datatable_dates" class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Ville</th>
                                        <th>Commentaires</th>
                                        <th>Modifié il y a</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($dates as $data)
                                    <tr @if($data->deleted_at) style="background:#E6EAEE;" @endif>
                                        <td>
                                        <span style="display:none;">{{ $data->date }}</span>
                                        <?php 
                                        \Carbon\Carbon::setLocale('fr_FR'); 
                                        echo \Carbon\Carbon::parse($data->date)->translatedFormat('j F, Y');
                                        ?>

                                        </td>
                                        <td>{{ $data->ville }} ({{ $data->cp }})</td>
                                        <td>{{ $data->commentaire }}</td>
                                        <td>
                                        <?php 
                                        \Carbon\Carbon::setLocale('fr'); 
                                        echo $date_to_show_in_view = $data->updated_at->diffForHumans(); 
                                        ?>
                                        </td>
                                        <td>
                                            @if($data->deleted_at)
                                                <form action="{{ route('dates.restore', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-light-success glow mr-1 mb-1" type="submit">Restaurer</button>
                                                    
                                                    <!-- <a href="" onclick="document.forms["restaurer"].submit()"><i class="badge-circle badge-circle-light-secondary bx bx-edit-alt font-medium-1"></i></a> -->
                                                </form>
                                            @endif

                                            <form action="{{ route($data->deleted_at? 'dates.force.destroy' : 'dates.destroy', $data->id) }}" method="post" style="@if($data->deleted_at) @else margin-left:51px; position:absolute;   @endif">
                                                  @csrf
                                                  @method('DELETE')
                                                  @if($data->deleted_at)
                                                  <button class="btn btn-danger glow" type="submit">Confirmer la suppression</button>
                                                  @else
                                                    <button class="btn btn-icon rounded-circle btn-light-danger glow" type="submit"><i class="bx bx-x"></i></button>
                                                  @endif
                                                  
                                              </form>
                                              @if($data->deleted_at)
                                            @else
                                              <!-- <a href="{{ route('dates.edit', $data->id) }}"><i class="badge-circle badge-circle-light-secondary bx bx-edit-alt font-medium-1"></i></a> -->
                                              <a href="{{ route('dates.edit', $data->id) }}">
                                                <button type="button" class="btn btn-icon rounded-circle btn-light-secondary glow"><i class="bx bx-edit-alt"></i></button>
                                              </a>

                                            @endif
                                      </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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
<!-- DataTables -->
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
@endsection
@section('page-scripts')
<!-- DataTables -->
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<!-- Popup confirmation delete -->
<script src="{{asset('js/scripts/modal/components-modal.js')}}"></script>
<script>
// Fermer la barre d'info
function submitform()
        {
           document.myform.submit();
        }

$(".alert").delay(2000).slideUp(200, function() {
    $(this).alert('close');
});
</script>
@endsection