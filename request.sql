-- Get all tournaments, with their games and players

-- Get last tournament and its games and players
SELECT * FROM `T_Tournament` WHERE tournament_date <= NOW() ORDER BY tournament_date DESC LIMIT 1
SELECT * FROM `T_Games` WHERE SELECT * FROM T_Games WHERE fk_game_tournament = {id}