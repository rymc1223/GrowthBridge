<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrowthBridge</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <style>
        @keyframes color-change {
            0% { color: #fc0303; }  /* red */
      25% { color: #000000; } /* black */
      50% { color: #28c76f; } /* green */
      75% { color: #0310c4; } /* blue */
      100% { color: #fc0303; } /* back to red */
        }
    
        .animate-color {
          animation: color-change 3s infinite;
        }
  /* Modal container */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Black with opacity */
    /* border-radius: 20px; */
  }

  /* Modal content box */
  .modal-content {
    background-color: white;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 300px;
    text-align: center;
    font-weight: bold;
  }

  /* Close button */
  .close {
    color: #aaa;
    /* float: right; */
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
    .disabled-button {
        opacity: 0.5;
        cursor: not-allowed;
    }
</style>
    
</head>
<script>
    document.onkeydown = function(event) {
        if (event.key == "F12" || 
            (event.ctrlKey && event.shiftKey && event.key == "I") || 
            (event.ctrlKey && event.shiftKey && event.key == "J") || 
            (event.ctrlKey && event.key == "U")) {
            return false; // Prevent default action
        }
    };
</script>
<script>
    document.addEventListener('contextmenu', function(event) {
        event.preventDefault();
    });
</script>
<body>

