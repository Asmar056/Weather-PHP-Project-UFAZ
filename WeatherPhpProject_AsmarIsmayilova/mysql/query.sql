/*
SELECT city.city_title, dateMeasurement, timeMeasurement, temperature, airPressure, precipitation, solarRadiance, windSpeed, windDirection,
    humidity, UVindex, cloudiness.cloudinessDescription, weather_overall.weatherDescription
FROM weather
    JOIN city ON city.cityId = weather.cityID
    JOIN cloudiness ON cloudiness.cloudinessID = weather.cloudinessID
    JOIN weather_overall ON weather_overall.weatherOverallID = weather.weatherOverallID ;

*/



/*
SELECT city.city_title, dateMeasurement, timeMeasurement, temperature, airPressure,
    precipitation, solarRadiance, windSpeed, windDirection, humidity, UVindex,
    cloudiness.cloudinessDescription, weather_overall.weatherDescription, DAYNAME
(dateMeasurement)as DAYNAME,DAYOFMONTH
(dateMeasurement) as DAYOFMONTH, MONTHNAME
(dateMeasurement) as MONTHNAME
FROM weather JOIN city ON city.cityId = weather.cityID
    JOIN cloudiness ON cloudiness.cloudinessID = weather.cloudinessID
    JOIN weather_overall ON weather_overall.weatherOverallID = weather.weatherOverallID
WHERE city.city_title = 'Agjabadi' AND dateMeasurement = CURRENT_DATE;

*/