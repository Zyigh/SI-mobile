## home

Request :
```sql
# home
SELECT
  `event`.`title`,
  `event`.`date`,
  (`event`.`maxGuests` - (
    SELECT SUM(`registered`.`guestsNum`)
      FROM `registered`
      WHERE `registered`.`validated` = TRUE)
  ) as maxGuests,
  `user`.`name`
FROM
  `location`
INNER JOIN
  `user`
  ON
    `location`.`id` = `user`.`location`
INNER JOIN
  `event`
  ON
    `user`.`id` = `event`.`user`
WHERE
  `location`.`city` = ':city'
LIMIT
  10
OFFSET
  0
;
SELECT
  COUNT(*)
FROM
  `message`
WHERE
  `message`.`toUser` = ':id'
AND
  `message`.`isRead` = FALSE
;

```
