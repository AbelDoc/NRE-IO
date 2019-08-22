
    /**
     * @file NRE_BinaryIOFile.tpp
     * @brief Implementation of Engine's BinaryIO's Object : BinaryIOFile
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

    namespace NRE {
        namespace IO {

            inline BinaryIOFile::BinaryIOFile(File const& p) : IOFile::IOFile(p) {
            }

            inline std::ios_base::openmode BinaryIOFile::getMode() const {
                return std::ios::in | std::ios::out | std::ios::binary;
            }

            inline std::fstream& BinaryIOFile::getStream() {
                return IOFile::getStream();
            }

        }
    }
