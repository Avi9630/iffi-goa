{{-- Countdown --}}
<section>
    <div class="countdown-bg">
        {{-- <p id="countdown-timer">Loading countdown...</p> --}}
        <p id="countdown-timer"></p>
    </div>
</section>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Nov 20, 2024 10:00:00 ").getTime();
    // var countDownDate = new Date("Nov 07, 2024 17:26:00 ").getTime();

    // Update the countdown every 1 second
    var x = setInterval(function() {

        // Get the current date and time
        var now = new Date().getTime();

        // Find the distance between now and the countdown date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes, and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="countdown-timer"
        document.getElementById("countdown-timer").innerHTML = days + " Days " + hours + " hours " +
            minutes + " minutes " + seconds + " seconds ";

        // If the countdown is over, display a message
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown-timer").innerHTML = "The event has started!";
        }
    }, 1000);
</script>
