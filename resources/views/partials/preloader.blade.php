<!-- resources/views/partials/preloader.blade.php -->
<div id="preloader" class="position-fixed top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
    style="z-index: 99999; background: #ffffff; transition: opacity 0.5s ease, visibility 0.5s ease;">

    <div class="text-center">

        <!-- Rotating Square around Name -->
        <div class="rhgc-loader mx-auto mb-3">
            <div class="rhgc-square"></div>
            <h3 class="rhgc-name">RHGC</h3>
        </div>

        <small class="text-muted d-block" style="letter-spacing: 2px; font-size: 0.7rem;">
            LOADING
        </small>
    </div>
</div>

<style>
    /* Wrapper — relative so square can be absolute */
    .rhgc-loader {
        position: relative;
        width: 130px;
        height: 130px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* The rotating square */
    .rhgc-square {
        position: absolute;
        inset: 0;
        border: 3px solid transparent;
        border-top-color: #F59E0B;
        border-right-color: #F59E0B;
        border-radius: 12px;
        animation: rhgcSpin 1.4s linear infinite;
    }

    /* Second square (offset, opposite rotation) — subtle depth */
    .rhgc-square::after {
        content: '';
        position: absolute;
        inset: 10px;
        border: 2px solid transparent;
        border-bottom-color: #1E40AF;
        border-left-color: #1E40AF;
        border-radius: 8px;
        animation: rhgcSpinReverse 1.8s linear infinite;
    }

    /* Brand name in center */
    .rhgc-name {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 800;
        font-size: 1.5rem;
        letter-spacing: -0.02em;
        color: #0F172A;
        margin: 0;
        position: relative;
        z-index: 2;
    }

    /* Keyframes */
    @keyframes rhgcSpin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes rhgcSpinReverse {
        0% {
            transform: rotate(360deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    /* Fade out */
    #preloader.is-hidden {
        opacity: 0 !important;
        visibility: hidden !important;
        pointer-events: none;
    }
</style>

<script>
    (function() {
        const preloader = document.getElementById('preloader');
        if (!preloader) return;

        function hidePreloader() {
            preloader.classList.add('is-hidden');
            setTimeout(() => preloader.remove(), 600);
        }

        // Hide on window load
        window.addEventListener('load', hidePreloader);

        // Safety fallback (network slow)
        setTimeout(hidePreloader, 2000);
    })();
</script>
