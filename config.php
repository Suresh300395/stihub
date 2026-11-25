<?php
// Centralized configuration file to detect the base URL dynamically

if (!defined('BASE_URL')) {
    // Get document root and current file directory (normalized with forward slashes)
    $doc_root = str_replace('\\', '/', isset($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : '');
    $current_dir = str_replace('\\', '/', __DIR__);
    
    $base_dir = '';
    
    // If document root is defined and matches the start of the current directory path
    if ($doc_root !== '' && stripos($current_dir, $doc_root) === 0) {
        $base_dir = substr($current_dir, strlen($doc_root));
    } else {
        // Fallback: If DOCUMENT_ROOT is not matching, use SCRIPT_NAME directory path
        $script_name = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '';
        $base_dir = str_replace('\\', '/', dirname($script_name));
    }
    
    // Normalize base directory (trim dots, slashes, backslashes)
    $base_dir = trim($base_dir, './\\');
    if ($base_dir !== '') {
        $base_dir = '/' . $base_dir;
    }
    
    // Define BASE_URL as the root-relative path (e.g., "" or "/stihub")
    define('BASE_URL', $base_dir);
}

/**
 * Dynamic thumbnail generator/helper.
 * Generates a thumbnail for a given gallery image if it doesn't exist, and returns the thumbnail URL.
 * Falls back to the original image URL on error or if GD is not available.
 * 
 * @param string $filename The image filename (e.g. 'image.webp')
 * @return string The relative URL of the thumbnail or original image
 */
function get_thumbnail($filename) {
    $gallery_dir = __DIR__ . '/images/Gallary_stihub';
    $thumbs_dir = $gallery_dir . '/thumbs';
    
    // Original and thumbnail full server paths
    $orig_path = $gallery_dir . '/' . $filename;
    $thumb_path = $thumbs_dir . '/' . $filename;
    
    // Original and thumbnail relative URLs
    $orig_url = BASE_URL . '/images/Gallary_stihub/' . $filename;
    $thumb_url = BASE_URL . '/images/Gallary_stihub/thumbs/' . $filename;
    
    // If original file doesn't exist, return empty or fallback
    if (!file_exists($orig_path)) {
        return $orig_url;
    }
    
    // If thumbnail already exists, return its URL
    if (file_exists($thumb_path)) {
        return $thumb_url;
    }
    
    // Create thumbs directory if it doesn't exist
    if (!is_dir($thumbs_dir)) {
        if (!mkdir($thumbs_dir, 0755, true)) {
            return $orig_url; // Fallback if cannot create dir
        }
    }
    
    // Check if GD and WebP support are available
    if (!function_exists('imagecreatefromwebp') || !function_exists('imagewebp')) {
        return $orig_url;
    }
    
    // Generate thumbnail
    try {
        // Load original image
        $src_img = @imagecreatefromwebp($orig_path);
        if (!$src_img) {
            // If it's not webp, or fails, check other formats
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            if ($ext === 'jpg' || $ext === 'jpeg') {
                $src_img = @imagecreatefromjpeg($orig_path);
            } elseif ($ext === 'png') {
                $src_img = @imagecreatefrompng($orig_path);
            } elseif ($ext === 'gif') {
                $src_img = @imagecreatefromgif($orig_path);
            }
        }
        
        if (!$src_img) {
            return $orig_url;
        }
        
        $src_width = imagesx($src_img);
        $src_height = imagesy($src_img);
        
        if ($src_width <= 0 || $src_height <= 0) {
            imagedestroy($src_img);
            return $orig_url;
        }
        
        // Target width for gallery grid thumbnails (e.g., 400px is perfect for masonry column)
        $target_width = 400;
        
        // If original is smaller than target, just copy or return original URL
        if ($src_width <= $target_width) {
            imagedestroy($src_img);
            return $orig_url;
        }
        
        // Calculate proportional height
        $target_height = (int)(($src_height / $src_width) * $target_width);
        
        // Create new image resource
        $dst_img = imagecreatetruecolor($target_width, $target_height);
        if (!$dst_img) {
            imagedestroy($src_img);
            return $orig_url;
        }
        
        // Handle transparency
        imagealphablending($dst_img, false);
        imagesavealpha($dst_img, true);
        
        // Resize
        if (imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $target_width, $target_height, $src_width, $src_height)) {
            // Save as WebP with 75% quality for excellent size/quality trade-off
            $saved = imagewebp($dst_img, $thumb_path, 75);
            imagedestroy($dst_img);
            imagedestroy($src_img);
            
            if ($saved) {
                return $thumb_url;
            }
        } else {
            imagedestroy($dst_img);
            imagedestroy($src_img);
        }
    } catch (\Exception $e) {
        // Silence errors and return fallback
    }
    
    return $orig_url;
}

