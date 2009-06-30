CREATE TABLE domain_model (concept_id BIGINT, concept_name VARCHAR(255), concept_slug VARCHAR(255) NOT NULL UNIQUE, lft INT, rgt INT, level SMALLINT, PRIMARY KEY(concept_id)) ENGINE = INNODB;
