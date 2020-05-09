-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 12:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apidoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Account OPS', 'account-ops', 'active', '2020-05-08 05:31:01', '2020-05-08 05:31:01'),
(2, 'USHER Engagement', 'usher-engagement', 'active', '2020-05-08 05:31:12', '2020-05-08 05:31:12'),
(3, 'Enterprise Data API', 'enterprise-data-api', 'active', '2020-05-08 05:31:40', '2020-05-08 05:31:40'),
(4, 'Enterprise contact API', 'enterprise-contact-api', 'active', '2020-05-08 05:32:03', '2020-05-08 05:32:03'),
(5, 'URL SERVICES', 'url-services', 'active', '2020-05-08 05:32:18', '2020-05-08 05:32:18'),
(6, 'STAT service', 'stat-service', 'active', '2020-05-08 05:32:33', '2020-05-08 05:32:33'),
(7, 'Chat Service', 'chat-service', 'active', '2020-05-08 05:32:42', '2020-05-08 05:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_05_04_123501_create_categories_table', 1),
(4, '2020_05_05_033413_create_posts_table', 1),
(5, '2020_05_05_105859_create_tabs_table', 1),
(6, '2020_05_05_110050_create_types_table', 1),
(7, '2020_05_07_061717_create_post_tabs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab_ids` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `tab_ids`, `slug`, `cat_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sign In', '[\"1\",\"2\",\"3\",\"5\"]', 'sign-in', 1, '<p><span style=\"color: rgb(51, 51, 51);\">This is the initial API that would take in the credentials email and password for the account and return back token id which will be used in various other API calls. When other API fails to access the account because token id had expired, the application is expected to initiate this sign-in process again to retrieve the new token for further interactions with Ushur.</span><br></p>', 'active', '2020-05-08 05:34:48', '2020-05-08 22:47:25'),
(2, 'RenewToken', '[\"1\",\"2\"]', 'renewtoken', 1, '<p><span style=\"color: rgb(51, 51, 51);\">This is the API that would be required to renew the token which was given by system during login procedure , it takes the current exisiting token as input and returns the new token with new lease time</span><br></p>', 'active', '2020-05-08 05:35:18', '2020-05-08 05:35:18'),
(3, 'Get DoNotDisturb Status Settings', '[\"1\",\"2\",\"3\"]', 'get-donotdisturb-status-settings', 1, '<p><span style=\"color: rgb(51, 51, 51);\">This is to retrieve the DoNotDisturb Status settings for the Ushur Account. An Account can represent an enterprise.</span><br></p>', 'active', '2020-05-08 05:35:59', '2020-05-08 05:35:59'),
(4, 'Initiate Any Campaign', '[\"1\",\"2\",\"3\",\"6\",\"7\",\"8\",\"9\"]', 'initiate-any-campaign', 2, '<p><span style=\"color: rgb(51, 51, 51);\">This API is to initiate an Ushur (also called as Campaign) to a specific phone number if this is a single campaign but if a bulk campaign the Ushur will be launched to all the users in the enterprise and hence the userPhoneNo parameter will be ignored if present.</span><br></p>', 'active', '2020-05-08 05:36:34', '2020-05-09 04:20:01'),
(5, 'Add or Update Enterprise Data on Ushur', '[\"1\",\"2\",\"3\",\"5\"]', 'add-or-update-enterprise-data-on-ushur', 3, '<p><span style=\"color: rgb(51, 51, 51);\">This request is used to either add or update one or multiple sets of enterprise data on the Ushur. The Ushur platform supports various modes of uploading the data so that the Ushurs with their micro-engagements can use these. There is support for secure ftp, uploading of files via the Ushur Front-End Interface or via API like these.</span><br></p>', 'active', '2020-05-09 04:12:47', '2020-05-09 04:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `post_tabs`
--

CREATE TABLE `post_tabs` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `tab_id` int(10) UNSIGNED DEFAULT NULL,
  `tab_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snippet` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tabs`
--

INSERT INTO `post_tabs` (`id`, `post_id`, `tab_id`, `tab_type`, `parameter`, `description`, `title`, `snippet`, `created_at`, `updated_at`) VALUES
(2, 4, 2, 'snippet', NULL, NULL, 'Success', '\"{\\r\\n      \\\"status\\\": \\\"success\\\",\\r\\n      \\\"respCode\\\": 200,\\r\\n      \\\"respText\\\": \\\"Success\\\",\\r\\n      \\\"activityId\\\": \\\"ffe96950-140a-445c-834c-dcc3b22017cb-1493284061475\\\"\\r\\n     }\"', '2020-05-08 05:43:00', '2020-05-08 05:43:00'),
(4, NULL, NULL, NULL, 'password', 'this is email', NULL, 'null', '2020-05-08 05:50:16', '2020-05-08 23:11:18'),
(7, 1, 2, 'snippet', NULL, NULL, 'Failure', '\"{\\r\\n  \\\"status\\\": \\\"failure\\\",\\r\\n  \\\"respCode\\\": \\\"404\\\",\\r\\n  \\\"data\\\":null,\\r\\n  \\\"infoText\\\": \\\"Account not found\\\",\\r\\n}\"', '2020-05-08 06:00:08', '2020-05-08 06:00:08'),
(8, 2, 1, 'table', 'tokenId', 'For any API operation other than the signup, the caller is expected to pass the credential which is this token Id that is returned upon a successful login submission. This tokenId must be sent in all API requests for other services.\r\n\r\nFor security reasons, Ushur has some mechanisms whereby it can internally regenerate this tokenId which is unique in the system. If an API request fails, the API caller is required to invoke the Login API, retrieve the updated tokenId from the response and then use for subsequent API services.', NULL, 'null', '2020-05-08 06:01:38', '2020-05-08 06:01:38'),
(9, 2, 2, 'snippet', NULL, NULL, 'Success', '\"{\\r\\n          \\\"status\\\": \\\"success\\\",\\r\\n          \\\"respCode\\\": \\\"200\\\",\\r\\n          \\\"tokenId\\\": \\\"eyJhbGciOiJIUzI1NiJ9.eyJqdGkiOiIyYjY0MmIzYi1iYTcyLTQ2OWEtYTExNy1lZWIxOTRjZDU3N2MiLCJpYXQiOjE1NjA0MDY3NzksInN1YiI6IkFjY291bnRBdXRoIiwiaXNzIjoiVVNIVVIiLCJhY2NvdW50RW5hYmxlZCI6IlkiLCJ1c2VyQWNjb3VudCI6IlNIVUJIQURBLlBBVEhBS0BVU0hVUi5DT00iLCJleHAiOjE1NjA0MTM5Nzl9.cT14SSCdossIzMMtupVhgTAhI9Dr3oogFoTAqb4h7ck\\\",\\r\\n          \\\"tokenLeaseTime\\\": \\\"120\\\",\\r\\n          \\\"tokenRenewThreshold\\\": \\\"3\\\"\\r\\n            }\"', '2020-05-08 06:02:04', '2020-05-08 06:02:04'),
(10, 2, 2, 'snippet', NULL, NULL, 'Failure', '\"{\\r\\n          \\\"status\\\": \\\"failure\\\",\\r\\n          \\\"respCode\\\": \\\"401\\\",\\r\\n          \\\"data\\\": null,\\r\\n          \\\"infoText\\\": \\\"You are not a valid user\\\",\\r\\n          }\"', '2020-05-08 06:02:20', '2020-05-08 06:02:20'),
(12, 1, 1, 'table', 'email', 'this is email field', NULL, 'null', '2020-05-08 23:12:28', '2020-05-08 23:15:39'),
(13, 1, 3, 'snippet', NULL, NULL, 'Brazil', '\"{\\r\\n  \\\"status\\\": \\\"failure\\\",\\r\\n  \\\"respCode\\\": \\\"404\\\",\\r\\n  \\\"data\\\":null,\\r\\n  \\\"infoText\\\": \\\"Account not found\\\",\\r\\n}\"', '2020-05-08 23:20:08', '2020-05-08 23:20:08'),
(14, 5, 1, 'table', 'content', 'Enterprise specific data set that either be a single set or a list of data set.', NULL, 'null', '2020-05-09 04:13:09', '2020-05-09 04:13:09'),
(15, 5, 1, 'table', 'token', 'The credential for identifying the account. This is the tokenId that was sent by Ushur as part of login response.', NULL, 'null', '2020-05-09 04:13:25', '2020-05-09 04:13:25'),
(16, 5, 2, 'snippet', NULL, NULL, 'The response will indicate the total number of records that were added or updated as well.', '\"{\\r\\n  \\\"success\\\": true,\\r\\n  \\\"respText\\\": \\\"Uneda Data update successful\\\",\\r\\n  \\\"respCount\\\": 2\\r\\n}\"', '2020-05-09 04:13:49', '2020-05-09 04:13:49'),
(17, 5, 5, 'table', 'success', 'A textual indication of success or failure.', NULL, 'null', '2020-05-09 04:14:11', '2020-05-09 04:14:11'),
(18, 5, 5, 'table', 'respText', 'A textual description of the response', NULL, 'null', '2020-05-09 04:14:28', '2020-05-09 04:14:28'),
(19, 5, 5, 'table', 'respCount', 'Number of data sets that were added or updated.', NULL, 'null', '2020-05-09 04:14:55', '2020-05-09 04:14:55'),
(20, 5, 3, 'snippet', NULL, NULL, 'The content can be an array of data.', '\"{\\r\\n  \\\"content\\\": [\\r\\n    {\\r\\n      \\\"phone\\\":\\\"12098746734\\\",\\r\\n      \\\"status\\\": \\\"shipping in progress\\\",\\r\\n      \\\"prescriptionId\\\":\\\"PId8888\\\",\\r\\n      \\\"orderId\\\": \\\"order-842918888\\\"\\r\\n    },\\r\\n    {\\r\\n      \\\"phone\\\":\\\"16614187487\\\",\\r\\n      \\\"status\\\": \\\"processing\\\",\\r\\n      \\\"prescriptionId\\\":\\\"PId8978\\\",\\r\\n      \\\"orderId\\\": \\\"order-967888884\\\"\\r\\n    }\\r\\n  ],\\r\\n  \\\"tokenId\\\": \\\"{{xtoken}}\\\"\\r\\n}\"', '2020-05-09 04:15:19', '2020-05-09 04:15:19'),
(21, 4, 1, 'table', 'cmd', 'A mandatory parameter. This is the command to indicate the action taken on the server. Possible values are initCampaign, initBulkCampaign. \r\n\r\ninitCampaign will launch the campaign indicated by the campaignId to the userPhoneNo indicated in the message. \r\n\r\ninitBulkCampaign will launch the campaign to all the users in the user db associated with the enterprise indicated by the tokenId. In this case the userPhoneNo is not needed in the API call.', NULL, 'null', '2020-05-09 04:20:33', '2020-05-09 04:20:33'),
(22, 4, 1, 'table', 'campaignID', 'A mandatory parameter. This is an identifier for an Ushur structured message that will be sent out upon this request when successfully completed. \r\n\r\nThis identifier will be published to the API caller as part of the documentation process.', NULL, 'null', '2020-05-09 04:20:53', '2020-05-09 04:20:53'),
(23, 4, 1, 'table', 'tokenId', 'A mandatory parameter. The credential for identifying the account. This is the tokenId that was sent by Ushur as part of login response.', NULL, 'null', '2020-05-09 04:21:11', '2020-05-09 04:21:11'),
(24, 4, 1, 'table', 'callBackNumber', 'An optional parameter. This is the phone number of the business that Ushur will connect the user to for a voice call.', NULL, 'null', '2020-05-09 04:21:29', '2020-05-09 04:21:29'),
(25, 4, 3, 'snippet', NULL, NULL, NULL, '\"Method: POST\\r\\nURL: https:\\/\\/community.ushur.me\\/initUshur\\r\\nContent-Type: application\\/json\\r\\n\\r\\n{\\r\\n\\\"cmd\\\": \\\"initCampaign\\\",\\r\\n\\\"tokenId\\\": \\\"{{token}}\\\",\\r\\n\\\"userPhoneNo\\\": \\\"+16614187487\\\",\\r\\n\\\"campaignId\\\": \\\"NetPromoterScore\\\",\\r\\n\\\"apiVer\\\":\\\"2.1\\\"\\r\\n}\"', '2020-05-09 04:21:51', '2020-05-09 04:21:51'),
(26, 4, 2, 'snippet', NULL, NULL, 'Failure', '\"{\\r\\n\\t\\t\\t\\\"status\\\": \\\"failure\\\",\\r\\n\\t\\t\\t\\\"respCode\\\": \\\"404\\\",\\r\\n\\t\\t\\t\\\"respText\\\": \\\"Invalid Ushur Id\\\",\\r\\n\\t\\t }\"', '2020-05-09 04:22:13', '2020-05-09 04:22:13'),
(27, 4, 6, 'snippet', NULL, NULL, 'A Sample invocation is shown below:', '\"var initSessionEndpoint = \'https:\\/\\/community.ushur.me\\/initUshur\'\\r\\nvar jsonStringLogin = convertTOjsonData(menuId, username, callbacknum, usernum, message);\\r\\n\\r\\n$.ajax({\\r\\n    type: \'POST\',\\r\\n    contentType: \'application\\/json\',\\r\\n    url: initSessionEndpoint,\\r\\n    dataType: \\\"text\\\",\\r\\n    data: jsonStringLogin,\\r\\n    success: function(response) {\\r\\n        callbackvalue(response);\\r\\n        console.log(\\\"Successfully delivered message\\\")\\r\\n    },\\r\\n    error: function(jqXHR, textStatus, errorThrown) {\\r\\n        console.log(\\\"Message Delivery Error:\\\", textStatus)\\r\\n    }\\r\\n});\\r\\n\\r\\nvar convertTOjsonData = function(menuId, username, callbacknum, usernum, message) {\\r\\n    return JSON.stringify({\\r\\n        \\\"cmd\\\": \\\"initCampaign\\\",\\r\\n        \\\"callBackNumber\\\": callbacknum,\\r\\n        \\\"tokenId\\\": tokenId,\\r\\n        \\\"userPhoneNo\\\": usernum,\\r\\n        \\\"userMsg\\\": message,\\r\\n        \\\"campaignId\\\": menuId\\r\\n    });\\r\\n};\"', '2020-05-09 04:22:52', '2020-05-09 04:22:52'),
(28, 4, 7, 'snippet', NULL, NULL, 'API can be invoked with curl like the following:', '\"curl -H \\\"Content-Type: application\\/json; charset=UTF-8\\\" --data @push.json https:\\/\\/community.ushur.me\\/initUshur\\r\\n\\r\\n\\r\\npush.json:\\r\\n{\\\"cmd\\\":\\\"initCampaign\\\",callBackNumber\\\":\\\"12092078446\\\",\\r\\n\\\"tokenId\\\":\\\"d5dbab0d-1251-4a2f-b5eb-8c0f752e997b\\\",\\r\\n\\\"userPhoneNo\\\":\\\"12098746734\\\",\\\"userMsg\\\":\\\"Hi Test, \\r\\nThis is a reminder for your upcoming appointment on 10\\/31\\/2014 at 1:00 PM.\\\",\\\"campaignId\\\":\\\"UshurIssEnterpriseMenu\\\"}\"', '2020-05-09 04:23:11', '2020-05-09 04:23:11'),
(29, 4, 8, 'snippet', NULL, NULL, 'A sample java code illustrates the direct form:  try {', '\"try {\\r\\n      JSONObject json = new JSONObject();\\r\\n      json.put(\\\"cmd\\\": \\\"initCampaign\\\");\\r\\n      json.put(\\\"callBackNumber\\\", \\\"12092078446\\\");   \\r\\n      json.put(\\\"tokenId\\\", \\\"d5dbab0d-1251-4a2f-b5eb-8c0f752e997b\\\");  \\r\\n      json.put(\\\"userPhoneNo\\\",\\\"12098746734\\\");\\r\\n      json.put(\\\"userMsg\\\",\\\"Hi Test, This is a reminder for your upcoming appointment on 10\\/31\\/2014 at 1:00 PM.\\\");\\r\\n      json.put(\\\"campaignId\\\",\\\"UshurIssEnterpriseMenu\\\");   \\r\\n\\r\\n      CloseableHttpClient httpClient = HttpClientBuilder.create().build();\\r\\n\\r\\n      try {\\r\\n        HttpPost request = new HttpPost(\\\"https:\\/\\/community.ushur.me\\/initUshur\\\");\\r\\n        StringEntity jsonParams = new StringEntity(json.toString());\\r\\n        request.addHeader(\\\"Content-type\\\", \\\"application\\/json\\\");\\r\\n        request.addHeader(\\\"Accept\\\",\\\"application\\/json\\\");\\r\\n        request.setEntity(jsonParams);\\r\\n        CloseableHttpResponse response = httpClient.execute(request);\\r\\n        System.out.println(response.toString());\\r\\n      } \\r\\n      catch (Exception ex) {\\r\\n        \\/\\/ handle exception here\\r\\n      } \\r\\n      finally {\\r\\n        httpClient.close();\\r\\n      }\\r\\n} \\r\\n\\r\\ncatch (Exception e) {\\r\\n    e.printStackTrace();\\r\\n}\"', '2020-05-09 04:24:27', '2020-05-09 04:24:27'),
(30, 4, 9, 'snippet', NULL, NULL, NULL, '\"HTTP\\/1.1 200 OK [Date: Thu, 23 Oct 2014 03:30:01 GMT, Content-Type: text\\/html;charset=ISO-8859-1, Content-Length: 7, Server: naju server 2.51]\\r\\n\\r\\n\\r\\nA negative (non-200) HTTP response will indicate that the send message failed.\"', '2020-05-09 04:24:46', '2020-05-09 04:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `tabs`
--

CREATE TABLE `tabs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('table','snippet') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabs`
--

INSERT INTO `tabs` (`id`, `title`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Request Parameter', 'table', 'active', '2020-05-08 05:33:07', '2020-05-08 05:33:07'),
(2, 'JSON resp', 'snippet', 'active', '2020-05-08 05:33:44', '2020-05-08 05:33:44'),
(3, 'Post Sample', 'snippet', 'active', '2020-05-08 05:33:59', '2020-05-08 05:33:59'),
(4, 'GET sample', 'snippet', 'active', '2020-05-08 05:34:08', '2020-05-08 05:34:08'),
(5, 'response', 'table', 'active', '2020-05-08 05:34:21', '2020-05-08 05:34:21'),
(6, 'Web JavaScript Form', 'snippet', 'active', '2020-05-09 04:18:34', '2020-05-09 04:18:34'),
(7, 'Curl Form', 'snippet', 'active', '2020-05-09 04:18:52', '2020-05-09 04:18:52'),
(8, 'Direct Java Form', 'snippet', 'active', '2020-05-09 04:19:11', '2020-05-09 04:19:11'),
(9, 'HTTP Response Sample', 'snippet', 'active', '2020-05-09 04:19:26', '2020-05-09 04:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$r/sNzZippFl1Mm/1Qpgi0.4eGffMZJ2t8knRNe5muceo48TPOjtQu', 'active', 'admin', 'NkcwHyRq226I7Rh1wJB2EwRqkzEanjPAh9CHi3NErcpWwBuUiymbZ05NnDxc', NULL, NULL),
(2, 'User', 'user@gmail.com', '$2y$10$rhk9Qg4AiUKn/YKATWSp0.h88SnuZHsHceYJl7Tdtxg8PJe3bb34S', 'active', 'user', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `post_tabs`
--
ALTER TABLE `post_tabs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tabs_post_id_foreign` (`post_id`),
  ADD KEY `post_tabs_tab_id_foreign` (`tab_id`);

--
-- Indexes for table `tabs`
--
ALTER TABLE `tabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_tabs`
--
ALTER TABLE `post_tabs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tabs`
--
ALTER TABLE `tabs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `post_tabs`
--
ALTER TABLE `post_tabs`
  ADD CONSTRAINT `post_tabs_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `post_tabs_tab_id_foreign` FOREIGN KEY (`tab_id`) REFERENCES `tabs` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
