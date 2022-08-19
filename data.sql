INSERT INTO activity(aname, calories_per_hour)
VALUES('walking', '270'),
      ('jogging', '560'),
      ('squats', '60'),
      ('jump_rope', '800'),
      ('swimming', '400'),
      ('burpees', '700'),
      ('pushups', '650');

INSERT INTO eats(uid, name, date, servings)
VALUES('12345','Josh', '2016-05-22', '2.25'),
      ('21324','John', '2016-07-15', '3.16'),
      ('23242','David', '2016-05-26', '4.03'),
      ('54353','Amy', '2016-05-05', '5.15'),
      ('53653','Emma', '2016-05-19', '3.53'),
      ('34334','Emily', '2016-05-23', '6.12'),
      ('53453','Joseph', '2016-05-11', '4.83'),
      ('33299','Ashley', '2016-05-04', '1.43'),
      ('32422','Claire', '2016-05-02', '2.95');

INSERT INTO food (name, calories_per_serving, serving_size, unit, protein_per_serving, fat_per_serving, carbs_per_serving)
VALUES('Apple', '93', '6.3', 'ounces', '0.5', '0.3', '24.7'),
      ('Oatmeal Cookie' , '81', '0.6', 'ounces', '1.1', '3.3', '12.4'),
      ('Multi-grain bread', '69', '0.9' , 'ounces', '3.5', '1.1', '11.3'),
      ('Banana', '89', '3.5', 'ounces', '1.1', '0.3', '22.8'),
      ('Brown rice cake', '35', '0.3', 'ounces', '0.7', '0.3', '7.3'),
      ('Coca Cola Classic','140', '12', 'Fluid ounces', '0', '0', '39'),
      ('Roasted Chicken Breast', '142', '3', 'ounces', '26.7', '3.1', '0'),
      ('Spinach', '7', '1.1', 'ounces', '0.9', '0.1', '1.1'),
      ('Hard boiled egg', '77', '1.8', 'ounces', '6.3', '5.3', '0.6'),
      ('Strawberries','49','5.4','ounces', '1', '0.5', '11.7');

INSERT INTO goal(uid, date, weight)
VALUES('12345', '2022-03-16', '135'),
      ('21324', '2022-08-04', '203'),
      ('23242', '2022-05-24','179'),
      ('54353', '2022-09-18','122'),
      ('53653', '2023-11-08','145'),
      ('34334', '2022-12-10','159'),
      ('53453', '2022-04-19','215'),
      ('33299', '2022-01-22','138'),
      ('32422', '2023-02-27','109');
        
INSERT INTO performs(uid, date, aname, duration)
VALUES('21324', '2021-10-14', 'jogging', '2.0'),
 	    ('12345', '2021-10-14', 'squats', '0.5'),
	    ('54353', '2021-09-27', 'swimming','1.0'),
	    ('53453', '2021-09-18', 'burpees', '0.2'),
	    ('53453', '2021-08-20', 'burpees', '0.5'),
	    ('32422', '2021-08-19', 'walking', '3.0'),
	    ('33299', '2021-08-09', 'pushups', '0.5');
       
INSERT INTO user(uid, fname, lname, bdate, height)
VALUES('12345', 'Josh', 'Davidson', '1999-11-01', '180'),
      ('23242', 'David', 'Smith', '2000-12-20', '179'),
      ('54353', 'Amy', 'Garcia', '1997-10-11', '165'),
      ('53653', 'Emma', 'Baggi', '1995-08-01', '160'),
      ('34334', 'Emily', 'James', '1996-11-22', '165'),
      ('53453', 'Joseph', 'Thompson', '1999-03-01', '185'),
      ('33299', 'Ashley', 'Davis', '1998-08-21', '172'),
      ('32422', 'Claire', 'Williams', '1997-11-29', '177');
      
INSERT INTO user(uid, fname, lname, bdate, height) /*ADMIN USER*/
VALUES('21324', 'John', 'Downes', '1998-04-05', '182');

INSERT INTO admin(admin_id)
VALUES('21324');

INSERT INTO weight(uid, date, bmr, weight)
VALUES('12345', '2021-10-14', '1735', '180'),
      ('21324', '2021-09-27', '1304', '137'),
      ('23242', '2021-09-18', '1593', '179'),
      ('54353', '2021-08-09', '1928', '165'),
      ('53653', '2021-06-23', '1499', '160'),
      ('34334', '2021-03-04', '1743', '165'),
      ('53453', '2021-09-22', '1856', '185'),
      ('33299', '2021-01-16', '1480', '172'),
      ('32422', '2021-04-07', '1786', '177');
