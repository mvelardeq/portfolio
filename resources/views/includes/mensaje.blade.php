@if (session('message'))
    <script>
        Toastify({
            text: "{{ session('message') }}",
            offset: {
                x: 50, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                y: 10 // vertical axis - can be a number or a string indicating unity. eg: '2em'
            },
        }).showToast();
    </script>
@endif
@if ($errors->any())
    <script>
        Toastify({
            text: "Your message hadn't sent, some inputs field is invalid!",
            className: "danger",
            style: {
                background: "#ff4949",
                color: "white"
            }
        }).showToast();
    </script>
@endif
