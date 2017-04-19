SELECT
    UPPER(last_name) AS 'NAME',
    first_name,
    price
FROM
    user_card
INNER JOIN subscription INNER JOIN member ON user_card.id_user = member.id_user_card AND member.id_sub = subscription.id_sub AND subscription.price > 42
ORDER BY
    last_name,
    first_name;