SELECT name
FROM
    distrib
WHERE
    (
        distrib.name LIKE '%y%y%' OR distrib.name LIKE '%yy%' OR distrib.name LIKE '%Yy%' OR distrib.name LIKE '%yY%' OR distrib.name LIKE '%YY%' OR distrib.name LIKE '%Y%y%' OR distrib.name LIKE '%Y%Y%' OR distrib.name LIKE '%y%Y%'
    ) AND(
        id_distrib = 42 OR(id_distrib BETWEEN 62 AND 69) OR id_distrib = 71 OR(id_distrib BETWEEN 88 AND 90)
    )
LIMIT 2, 5;
