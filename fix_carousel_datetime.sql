-- Script pour corriger les types de colonnes de date dans la table carousel

-- Vérifier si nous avons des données existantes
DO $$
DECLARE
    carousel_count INTEGER;
BEGIN
    SELECT COUNT(*) INTO carousel_count FROM carousel;
    RAISE NOTICE 'Nombre d''enregistrements dans la table carousel: %', carousel_count;
END
$$;

-- Modifier le type de colonne updated_at
ALTER TABLE carousel 
ALTER COLUMN updated_at TYPE TIMESTAMP WITHOUT TIME ZONE 
USING CASE 
    WHEN updated_at IS NULL THEN NULL 
    ELSE updated_at::TIMESTAMP WITHOUT TIME ZONE 
END;

-- Modifier le type de colonne created_at
ALTER TABLE carousel 
ALTER COLUMN created_at TYPE TIMESTAMP WITHOUT TIME ZONE 
USING created_at::TIMESTAMP WITHOUT TIME ZONE;

-- Vérifier les modifications
SELECT column_name, data_type 
FROM information_schema.columns 
WHERE table_name = 'carousel' AND (column_name = 'updated_at' OR column_name = 'created_at');