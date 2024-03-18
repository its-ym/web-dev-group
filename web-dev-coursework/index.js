<script>
    // Get the span element by its ID
    var moreInfoSpan = document.getElementById("more-info");

    // Add click event listener
    moreInfoSpan.addEventListener("click", function() {
        // Toggle visibility of additional information when clicked
        var additionalInfo = document.querySelector(".additional-info");
        additionalInfo.classList.toggle("show");
    });
</script>

.additional-info.show {
    display: block;
}
