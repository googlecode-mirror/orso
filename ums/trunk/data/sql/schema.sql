CREATE TABLE domain_model (id BIGINT AUTO_INCREMENT, concept_name VARCHAR(255), lft INT, rgt INT, level SMALLINT, slug VARCHAR(255), UNIQUE INDEX sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user (id BIGINT AUTO_INCREMENT, username VARCHAR(255) NOT NULL UNIQUE, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user_model (id BIGINT AUTO_INCREMENT, concept_id BIGINT NOT NULL, user_id BIGINT NOT NULL, bloom_evaluation BIGINT, bloom_synthesis BIGINT, bloom_analysis BIGINT, bloom_application BIGINT, bloom_understanding BIGINT, bloom_knowledge BIGINT, INDEX concept_id_idx (concept_id), INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE user_model ADD FOREIGN KEY (user_id) REFERENCES user(id);
ALTER TABLE user_model ADD FOREIGN KEY (concept_id) REFERENCES domain_model(id);
