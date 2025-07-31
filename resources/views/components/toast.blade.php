<div
    x-data="{ showToast: false, message : '' }"
    x-on:show-toast.window="
        showToast = true
        message = event.detail.message
        setTimeout(function() { showToast = false }, 3000)
    "
    x-show="showToast"
    class="fixed bottom-5 right-5 px-2 py-1 bg-green-100 text-green-800 border border-green-200 text-sm shadow rounded"
    x-text="message"
></div>
