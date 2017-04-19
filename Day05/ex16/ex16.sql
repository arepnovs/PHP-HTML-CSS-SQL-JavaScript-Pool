SELECT
    COUNT(*) AS 'films'
FROM
    member_history
WHERE
    DATE >= '2006-10-30' AND DATE <= '2007-07-27' OR MONTH(DATE) = '12' AND DAY(DATE) = '24';
