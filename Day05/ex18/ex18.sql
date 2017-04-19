SELECT
    *
FROM
    distrib
WHERE
    (
        distrib.name LIKE '%y%y%' OR distrib.name LIKE '%yy%'
    ) AND(
        id_distrib = 42 OR(id_distrib BETWEEN 62 AND 69) OR id_distrib = 71 OR(id_distrib BETWEEN 88 AND 90)
    )
LIMIT 2, 5;