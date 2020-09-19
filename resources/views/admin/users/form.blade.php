<div class="row">
    <div class="form-group col-12">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" class="form-control" autofocus required value="{{ old('name', $user->name )}}">
    </div>
    @can('is_admin', $user)
        <div class="form-group col-12">
            <label for="is_admin" class="required">Nível de Usuário </label>
            <select name="is_admin" id="is_admin" class="form-control select2" required value="{{ old('is_admin', $user->is_admin) }}">
                <option></option>
                <option value="0">Usuário</option>
                <option value="1">Administrador</option>
            </select>
        </div>
    @endcan
    <div class="form-group col-12">
        <label for="email" class="required">E-mail </label>
        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email', $user->email )}}">
    </div>

    @if(!Route::is('users.show'))
        @if(Route::is('users.edit'))
            <div class="form-group col-6">
                <label for="password">Senha </label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="password_confirmation">Confirme sua senha </label>
                <input type="password" name="password_confirmation" id="password" class="form-control">
            </div>
        @else
            <div class="form-group col-6">
                <label for="password" class="required">Senha </label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group col-6">
                <label for="password_confirmation" class="required">Confirme sua senha </label>
                <input type="password" name="password_confirmation" id="password" class="form-control" required>
            </div>
        @endif
    @endif
</div>

@if(Route::is('users.show'))
    @push('scripts')
        <script>
            $('.form-control').attr('readonly',true);
            $(function(){
                $('.select2').select2({
                    placeholder: "Selecione um nível de usuário",
                    disabled: true
                });
            });
            $('select[value]').each(function(){
                $(this).val($(this).attr('value'));
            });
        </script>
    @endpush
@else
    @push('scripts')
        <script>
            $(function(){
                $('.select2').select2({
                    placeholder: "Selecione um nível de usuário"
                });
            });
            $('select[value]').each(function(){
                $(this).val($(this).attr('value'));
            });
        </script>
    @endpush
@endif
