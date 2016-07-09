--  -----------------------------------------------------------------------------------
-- TestLink Open Source Project - http://testlink.sourceforge.net/
-- This script is distributed under the GNU General Public License 2 or later.
-- @filesource testlink_create_tables.sql
--
-- SQL script - update db tables for TL
-- Database Type: Microsoft SQL Server
--
-- ATTENTION: do not use a different naming convention, that one already in use.
--            TEXTIMAGE Option can be used only tables that have fields of type:
--            varchar(MAXSIZEALLOWED), nvarchar(MAXSIZEALLOWED), varbinary(MAXSIZEALLOWED), xml 
-- 
--        Find issue with custom_fields table if two fields were char(4000)
--        changed to varchar(4000) everything goes OK
--            http://www.mssqltips.com/sqlservertip/2242/row-sizes-exceeding-8060-bytes-in-sql-2005/
-- 
-- ATTENTION: 
-- 
-- @internal revisions
--                          
--  -----------------------------------------------------------------------------------
--
--- 
SET IDENTITY_INSERT /*prefix*/rights ON
INSERT INTO /*prefix*/rights (id,description) VALUES (47,'testcase_freeze');
SET IDENTITY_INSERT /*prefix*/rights OFF

--  Rights for Administrator role
INSERT INTO /*prefix*/role_rights (role_id,right_id) VALUES (8,47);

ALTER TABLE /*prefix*/cfield_testprojects ADD monitorable INT NOT NULL default '0';

ALTER TABLE /*prefix*/users ALTER COLUMN "login" VARCHAR(100);
ALTER TABLE /*prefix*/users ALTER COLUMN "first" VARCHAR(50);
ALTER TABLE /*prefix*/users ALTER COLUMN "last" VARCHAR(50);

CREATE TABLE /*prefix*/req_monitor (
  req_id INT NOT NULL DEFAULT '0',
  user_id  INT NOT NULL DEFAULT '0',
  testproject_id INT NOT NULL DEFAULT '0',
  CONSTRAINT /*prefix*/PK_req_monitor PRIMARY KEY  CLUSTERED 
  (
    req_id,user_id,testproject_id
  )  ON [PRIMARY]
) ON [PRIMARY];