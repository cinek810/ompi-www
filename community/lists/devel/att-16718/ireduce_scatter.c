#include <stdlib.h>
#include <stdio.h>
#include <mpi.h>
int main(int argc, char *argv[])
{
  int i,size,rank;
  int sendbuf[] = {1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1};
  int recvbuf[] = {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0};
  int rcounts[] = {1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1};
  MPI_Init(&argc, &argv);
  MPI_Comm_size(MPI_COMM_WORLD, &size);
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  if (size > 16) MPI_Abort(MPI_COMM_WORLD,1);
#ifndef NBCOLL
#define NBCOLL 1
#endif
#if NBCOLL
  {
    MPI_Request request;
    MPI_Ireduce_scatter(sendbuf, recvbuf, rcounts, MPI_INT,
                        MPI_SUM, MPI_COMM_WORLD, &request);
    MPI_Wait(&request,MPI_STATUS_IGNORE);
  }
#else
  MPI_Reduce_scatter(sendbuf, recvbuf, rcounts, MPI_INT,
                     MPI_SUM, MPI_COMM_WORLD);
#endif
  printf("[%d] rbuf[%d]=%2d  expected:%2d\n", rank, 0, recvbuf[0], size);
  for (i=1; i<size; i++) {
    printf("[%d] rbuf[%d]=%2d  expected:%2d\n", rank, i, recvbuf[i], 0);
  }
  MPI_Finalize();
  return 0;
}
