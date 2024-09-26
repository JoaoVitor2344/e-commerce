<script !src="">
    $(() => {
        let show;
        let icon;
        let title;
        let html;

        @if(session('error'))
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            },

        });

        show = true;
        icon = 'error';
        title = '{{ session('error') }}';
        @endif

        if (show) {
            Toast.fire({
                icon: icon,
                title: title,
                html: html,
            });
        }
    });
</script>
