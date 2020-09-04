@if(session('success'))
    @push('scripts')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Operação concluida com sucesso!',
                showConfirmButton: true,
                timer: 1500
            })
        </script>
    @endpush
@endif
