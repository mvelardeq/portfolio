@if (session('message'))
    <script>
        Toastify({
            text: "{{ session('message') }}",
            offset: {
                x: 50, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                y: 10 // vertical axis - can be a number or a string indicating unity. eg: '2em'
            },
            className: "success",
            style: {
                background: "#15803d",
                color: "white"
            }
        }).showToast();
    </script>
@endif
@if ($errors->any())
    <script>
        Toastify({
            text: "Your message hasn't sent, some input fields are invalid!",
            className: "danger",
            style: {
                background: "#ff4949",
                color: "white"
            }
        }).showToast();
    </script>
@endif
