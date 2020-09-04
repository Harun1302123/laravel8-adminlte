<div class="row">
    <div class="form-group col-12">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" required class="form-control" autofocus value="{{ old('name', $user->name )}}">
    </div>
        <div class="form-group col-12">
            <label for="is_admin" class="required" >Nível de Usuário </label>
            <select name="is_admin" id="is_admin" class="form-control select2" value="{{ old('is_admin', $user->is_admin) }}">
                <option value="0">Usuário</option>
                <option value="1">Administrador</option>
            </select>
        </div>
    <div class="form-group col-12">
        <label for="email" class="required">E-mail </label>
        <input type="email" name="email" id="email" autocomplete="off" required class="form-control" value="{{ old('email', $user->email )}}">
    </div>
    
    @if(!isset($show))
        @if(Route::is('users.edit'))
            <div class="form-group col-12">
                <label for="password">Senha </label>
                <input type="password" autocomplete="password" name="password"  id="password"  class="form-control" >
            </div>
            <div class="form-group col-12">
                <label for="confirm_password">Confirme sua senha </label>
                <input type="password" name="confirm_password" autocomplete="password" id="password" class="form-control">
            </div>
        @else
            <div class="form-group col-12">
                <label for="password" class="required">Senha </label>
                <input type="password" name="password"  id="password" required class="form-control" >
            </div>
            <div class="form-group col-12">
                <label for="confirm_password" class="required">Confirme sua senha </label>
                <input type="password" name="confirm_password" id="password" required class="form-control">
            </div>
        @endif
    @endif
</div>

@push('scripts')
    <script>
        $(function(){
            $('.select2').select2();
        })
        $('select[value]').each(function(){
            $(this).val($(this).attr('value'));
        })
    </script>
@endpush