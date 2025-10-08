import httpClient from '@/infrastructure/http/httpClient.js';

export async function fetchPortfolio() {
  const { data } = await httpClient.get('/portfolio.php');
  return data;
}
