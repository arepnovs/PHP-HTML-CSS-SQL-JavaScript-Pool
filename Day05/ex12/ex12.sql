SELECT
    last_name,
    first_name
FROM
    user_card
WHERE
    (last_name REGEXP '[a-zA-Z]+-[a-z]+' OR first_name REGEXP '[a-zA-Z]+-[a-z]+')
ORDER BY
    last_name,
    first_name;
