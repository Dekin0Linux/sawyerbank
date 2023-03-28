
<div class="container bg-white text-light">
    
</div>
    <!-- BS-JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- sweet alert js -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    let restrict = document.querySelectorAll('.noAccess')
    restrict.forEach(item=>{
        item.addEventListener('click',function(){
            swal({
                title: "You Have No Access",
                text: "",
                icon: "error",
            });
        })
    })

</script>



</body>
</html>