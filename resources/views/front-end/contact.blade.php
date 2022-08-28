@extends('front-end.layouts.app')

@section('main-content')
<section class="contact-container">
    <article class="contact-content">
        <form method="POST" action="{{ route('sendMail') }}">
            @csrf
            <div class="form-group">
                <div class="form-group_item">
                    <label for="">Nombre:</label>
                    <input type="text" name="name">
                    @error('name')
                        <p class="error">Error con el campo nombre</p>
                    @enderror
                </div>
                <div class="form-group_item">
                    <label for="">Apedillos:</label>
                    <input type="text" name="lastName">
                    @error('lastName')
                        <p class="error">Error con el campo apellidos</p>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-group_item">
                    <label for="">Correo electronico:</label>
                    <input type="email" name="email">
                    @error('email')
                        <p class="error">Error con el campo email</p>
                    @enderror
                </div>
                <div class="form-group_item">
                    <label for="">Telefono:</label>
                    <input type="tel" name="telefono">
                    @error('telefono')
                        <p class="error">Error con el campo telefono</p>
                    @enderror
                </div>
            </div>
            <div class="form-textarea">
                <label for="">Mensaje:</label>
                <textarea name="message" rows="10"></textarea>
                @error('message')
                        <p class="error">Error con el campo mensaje</p>
                 @enderror
            </div>
            <div class="form-button">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </article>
</section>

@if(session('success'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal({
                title: "Formulario",
                text: "El Formulario se ha enviado correctamente",
                icon: "success",
                button: "Aceptar",
            });
        </script>
    @endif
@endsection