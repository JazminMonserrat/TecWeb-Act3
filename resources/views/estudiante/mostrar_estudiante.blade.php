<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container mb-4 mt-4">
    <a href="{{ route('estudianteIndex') }}">
        <button type="button" class="btn btn-primary btn-lg">Registrar estudiante</button>
    </a>
</div>
<div class="container">
    <div class="line-search">
        <section>
            <form method="get" action="{{ route('estudianteList') }}">            
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Matrícula estudiante" aria-label="Recipient's username" aria-describedby="button-addon2" name="busqueda">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
                  </div>
            </form>
        </section>
    </div>
</div>
<div class="container">
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">Matrícula</th>
            <th scope="col">Nombre completo</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Email</th>
            <th scope="col">Num Celular</th>
            <th scope="col">Calle</th>
            <th scope="col">Colonia</th>
            <th scope="col">C.P.</th>
          </tr>
    </thead>
    <tbody>
      @foreach ($listaEstudiante as $estudiante)
      <tr>
        <th scope="row">{{$estudiante->matricula}}</th>
        <td>{{$estudiante->nombre}} {{$estudiante->apellidoP}} {{$estudiante->apellidoM}}</td>
        <td>{{$estudiante->fechaNacimiento}}</td>
        <td>{{$estudiante->email}}</td>
        <td>{{$estudiante->celular}}</td>
        <td>{{$estudiante->calle}}</td>
        <td>{{$estudiante->colonia}}</td>
        <td>{{$estudiante->codigoPostal}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>