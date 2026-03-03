<?php
$cms_db = null;

function cms_connect() {
    global $cms_db;
    if ($cms_db) return $cms_db;
    try {
        $cms_db = new PDO(
            'pgsql:host=100.116.132.111;port=5432;dbname=ai_data',
            'postgres', 'db#sunny2day&cool2nightJames',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_TIMEOUT => 3]
        );
        return $cms_db;
    } catch (PDOException $e) {
        error_log("CMS DB connection failed: " . $e->getMessage());
        return null;
    }
}

function cms_get_book($slug) {
    $db = cms_connect();
    if (!$db) return null;
    try {
        $stmt = $db->prepare("SELECT b.*, p.slug, p.status, p.meta_description FROM cms_books b JOIN cms_pages p ON b.page_id = p.id WHERE p.slug = :slug AND p.status = 'published' LIMIT 1");
        $stmt->execute(['slug' => $slug]);
        return $stmt->fetch();
    } catch (PDOException $e) {
        error_log("CMS get_book error: " . $e->getMessage());
        return null;
    }
}

function cms_get_testimonials($book_id) {
    $db = cms_connect();
    if (!$db) return [];
    try {
        $stmt = $db->prepare("SELECT author, author_title, quote, display_order FROM cms_testimonials WHERE book_id = :book_id ORDER BY display_order ASC, id ASC");
        $stmt->execute(['book_id' => $book_id]);
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        error_log("CMS get_testimonials error: " . $e->getMessage());
        return [];
    }
}

function cms_get_all_books() {
    $db = cms_connect();
    if (!$db) return [];
    try {
        $stmt = $db->query("SELECT b.*, p.slug, p.status FROM cms_books b JOIN cms_pages p ON b.page_id = p.id WHERE p.status = 'published' ORDER BY b.display_order ASC");
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        error_log("CMS get_all_books error: " . $e->getMessage());
        return [];
    }
}

function cms_get_content($page_slug, $section_name = 'main') {
    $db = cms_connect();
    if (!$db) return null;
    try {
        $stmt = $db->prepare("SELECT content FROM cms_content_blocks cb JOIN cms_pages p ON cb.page_id = p.id WHERE p.slug = :slug AND cb.section_name = :section LIMIT 1");
        $stmt->execute(['slug' => $page_slug, 'section' => $section_name]);
        $row = $stmt->fetch();
        return $row ? $row['content'] : null;
    } catch (PDOException $e) {
        error_log("CMS get_content error: " . $e->getMessage());
        return null;
    }
}
?>
