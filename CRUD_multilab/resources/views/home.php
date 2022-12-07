<?php include("includes/header.php") ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Centro Médico</th>
      <th scope="col">Dirección</th>
      <th scope="col">Fecha de creación</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $centro)
        <tr>
            <th scope="row">{{ $centro['id'] }}</th>
            <td>{{ centro['local_name']}}</td>
            <td>{{ centro['local_address']}}</td>
            <td>{{ centro['created_at']}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
<?php include("includes/footer.php") ?>