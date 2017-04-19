SELECT
    last_name,
    first_name
FROM
    user_card
INNER JOIN member ON id_user = id_user_card
WHERE
    last_name LIKE '%-%' OR first_name LIKE '%-%'
ORDER BY
    last_name,
    first_name;