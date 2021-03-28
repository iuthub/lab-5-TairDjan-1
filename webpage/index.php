<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="http://www.google.com/search?">
        Search Criteria <input type="text" name="q"> <input type="submit" value="Search">
    </form>

    <hr>
    <form action="http://httpbin.org/post" method="post">
        <h2>
            My Form
        </h2>
        <dl>
            <dt>Username</dt>
            <dd><input type="text" name="username" maxlength="10"></dd>
            <dt>Password</dt>
            <dd><input type="password" name="password"></dd>

            <dt></dt>
            <dd>
                <input type="submit" value="Submit">
            </dd>
        </dl>
        <dt>Bir</dt>
        <dd>
            <input type="radio" name="birthTown" value="Tash"> Tashkent
            <input type="radio" name="birthTown" value="Samar" checked> Samarkand
        </dd>

        <dt>Countries visited</dt>
        <dd>
            <select name="countriesVisited" multiple size="3">
                <option value="uz">Uzbekistan</option>
                <option value="kz">Kazakhstan</option>
                <option value="ky">Kyrgizistan</option>
                <option value="tj">Tadjikistan</option>
                <option value="tk">Turkmenistan</option>
                <option value="ru">Russia</option>
            </select>
        </dd>

        <dt>Country of Birth</dt>
        <dd>
            <select name="countryOfBirth">
                <option value="uz">Uzbekistan</option>
                <option value="kz">Kazakhstan</option>
                <option value="ky">Kyrgizistan</option>
                <option value="tj">Tadjikistan</option>
                <option value="tk">Turkmenistan</option>
                <option value="ru">Russia</option>
            </select>
        </dd>
    </form>


</body>
</html>
