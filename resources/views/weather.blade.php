<!DOCTYPE html>
<html>
<head>
    <title>Weather Info</title>
    <style>
        .weather-container {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }
        .weather-box {
            border: 1px solid #ccc;
            padding: 20px;
            width: 25%;
            text-align: center;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Weather Information</h1>
    <div class="weather-container">
        @foreach($weatherData as $data)
            <div class="weather-box">
                <h3>{{ ucfirst($data['city']) }}</h3>
                @if(isset($data['error']))
                    <p>{{ $data['error'] }}</p>
                @else
                    <p><strong>Temperature:</strong> {{ $data['temperature'] }}°C</p>
                    <p><strong>Description:</strong> {{ $data['description'] }}</p>
                    <p><strong>Humidity:</strong> {{ $data['humidity'] }}%</p>
                @endif
            </div>
        @endforeach
    </div>
</body>
</html>
