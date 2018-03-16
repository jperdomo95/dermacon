<div class="form-group">
  <label for="name">Nombre Completo</label>
  <input type="text" name="name" id="name" class="form-control" value="{{ $patient->name }}" readonly>
  <input type="hidden" name="patient_id" value="{{ $patient->id }}">
</div>

<div class="form-group">
  <label for="ci">N° de Cédula</label>
  <input type="text" name="ci" id="ci" class="form-control" value="{{ $patient->ci }}" readonly>
</div>

<div class="form-group">
  <label for="email">Correo</label>
  <input type="text" name="email" id="email" class="form-control" value="{{ $patient->email }}" readonly>
</div>

<div class="form-group">
  <label for="doctor">Doctor</label>
  <select name="doctor" id="doctor" class="form-control">
    <option value="">Seleccione un Doctor</option>
    @foreach($doctors as $doctor)
      <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="motive">Motivo</label>
  <input type="text" name="motive" id="motive" class="form-control" value="{{ $patient->motive }}">
</div>

<div class="form-group">
  <label for="date">Fecha</label>
  <input type="text" name="date" placeholder="dd/mm/yy" class="form-control">
</div>

<div class="form-group">
  <button type="submit" name="button" class="btn btn-primary">PEDIR</button>
</div>
