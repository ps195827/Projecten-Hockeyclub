@extends('template_backend_admin.home')
@section('sub-title','Nieuwe oefening')
@section('content')


    @if(count($errors)>0)
        @foreach($errors->all() as $errors)
            <div class="alert alert-danger" role="alert">
                {{ $errors }}
            </div>
        @endforeach
    @endif

    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            <b>Success</b> , {{ Session('success') }}
            </div>
        </div>
    @endif

    <form action="{{ route('oefening.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label>Titel</label>
            <input type="text" class="form-control" name="titel">

        <div class="form-group">
            <label>Domein</label>
            <select class="form-control" name="domein_id">
            <option value="" holder>Kies een domein</option>
            @foreach($domein as $result)
                <option value="{{ $result->id }}">{{ $result->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    

    <div class="form-group">
        <label>Sector</label>
        <select class="form-control" name="sector_id">
        <option value="" holder>Kies een domein</option>
        @foreach($sector as $result)
            <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Subsector</label>
        <select class="form-control" name="subsector_id">
        <option value="" holder>Kies een domein</option>
        @foreach($subsector as $result)
            <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Leerfase</label>
        <select class="form-control" name="leerfase_id">
        <option value="" holder>Kies een domein</option>
        @foreach($leerfase as $result)
            <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Moeilijkheidsgraad</label>
        <select class="form-control" name="moeilijkheidsgraad_id">
        <option value="" holder>Kies een moeilijkheidsgraad</option>
        @foreach($moeilijkheidsgraad as $result)
            <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Beschrijving</label>
        <textarea class="form-control" name="beschrijving" id="content"></textarea>
    </div>

    <div class="form-group">
        <label>Spelfase</label>
        <select class="form-control" name="spelfase_id">
        <option value="" holder>Kies een spelfase</option>
        @foreach($spelfase as $result)
            <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Trainingsonderdeel</label>
        <select class="form-control" name="trainingsonderdeel_id">
        <option value="" holder>Kies een trainingsonderdeel</option>
        @foreach($trainingsonderdeel as $result)
            <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Oefeningsduur in minuten</label>
        <input type="number" class="form-control" name="duur">
    </div>

    <div class="form-group">
        <label>Hulpmiddelen</label>
        <input type="text" class="form-control" name="hulpmiddelen">
    </div>

    <div class="form-group">
        <label>Aandachtspunten</label>
        <textarea class="form-control" name="aandachtspunten" id="content3"></textarea>
    </div>

    <div class="form-group">
        <label>Werkvorm</label>
        <select class="form-control" name="werkvorm_id">
        <option value="" holder>Kies een trainingsonderdeel</option>
        @foreach($werkvorm as $result)
            <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Veel voorkomende fouten</label>
        <textarea class="form-control" name="fouten" id="content4"></textarea>
    </div>

    <div class="form-group">
        <label>Makkelijker maken</label>
        <textarea class="form-control" name="makkelijkmaken" id="content4"></textarea>
    </div>

    <div class="form-group">
        <label>Moeilijker maken</label>
        <textarea class="form-control" name="moeilijkmaken" id="content4"></textarea>
    </div>

    <div class="form-group">
        <label>Tips</label>
        <textarea class="form-control" name="tips" id="content4"></textarea>
    </div>
 

    

    <div class="form-group">
        <label>Afbeelding</label>
        <input type="text" class="form-control" name="afbeelding">
    </div>

    <div class="form-group">
        <label>Filmpje</label>
        <input type="text" class="form-control" name="filmpje">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Niewe oefening toevoegen">
    </div>
    

    
  <!-- <textarea name="editor_content" id="myEditor"></textarea> -->
  
</form>
</form>


<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
    CKEDITOR.replace( 'content2' );
    CKEDITOR.replace( 'content3' );
    CKEDITOR.replace( 'content4' );
</script>



@endsection